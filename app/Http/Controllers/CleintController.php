<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clients;

class CleintController extends Controller
{
    public function index()
    {
        $clients = Clients::all();
        return response()->json($clients);
    }

    public function store(Request $request)
    {
        $client = new Clients;
        $client->name = $request->name;
        $client->status = $request->status;
        $client->save();
        return response()->json(["message"=>"Client Added."],201);
    }

    public function show($id)
    {
        $client = Clients::find($id);
        if(!empty($client))
        {
            return response()->json($client);
        }
        else
        {
            return response()->json(["message"=>"Clinet not found"],404);
        }
    }

    public function update(Request $request,$id)
    {
        if(Clients::where('id',$id)->exists())
        {
            $client = Clinets::find($id);
            $client->name = is_null($request->name) ? $client->name : $request->name;
            $client->status = is_null($request->status) ? $client->status : $request->status;
            $client->save();
            return response()->json(["message"=>"client updated."],201);

        }
        else
        {
            return response()->json(["message"=>"Client Not found."],404);
        }
    }

    public function destroy($id)
    {
        if(Clients::where('id',$id)->exists())
        {
            $client = Cleints::find($id);
            $client->delete();
            return response()->json(["message"=>"Clinet deleted."],202);
        }
        else
        {
            return response()->json(["message"=>"client not found."],404);
        }
    }
}
