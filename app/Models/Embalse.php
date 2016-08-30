<?php

namespace app;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Embalse extends Model
{
    protected $table = 'embalses';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'nombre', 'siteID', 'latitude', 'longitude', 'desborde', 'seguridad', 'observacion', 'ajuste', 'control', 'capacidad',

    ];

    public function save(array $options = [])
    {
        $this->slug = str_slug($this->nombre);

        return parent::save($options);
    }

    public function latestRead()
    {
        $usgs = 'http://nwis.waterdata.usgs.gov/pr/nwis/uv/?cb_62616=on&format=rdb&site_no=%s&begin_date=%s&end_date=%s';

        $usgs = sprintf($usgs, $this->siteID, Carbon::now()->toDateString(), Carbon::now()->toDateString());

        $client = new \GuzzleHttp\Client();

        $res = $client->request('GET', $usgs);

        $data = array_slice(str_getcsv($res->getBody()->getContents(), "\t"), 10);

        $latest_read = array_slice($data, count($data) - 6)[4] ?? "0";

        foreach (array_only($this->toArray(), ['desborde', 'seguridad', 'observacion', 'ajuste', 'control']) as $key => $value) {
            if ($latest_read > $value) {
                return ['embalse' => $this->nombre, 'nivel' => $latest_read, 'status' => $key, 'capacidad' => $this->capacidad];
            }
        }

        return ['embalse' => $this->nombre, 'nivel' => $latest_read, 'status' => 'desconocido', 'capacidad' => $this->capacidad];
    }
}
