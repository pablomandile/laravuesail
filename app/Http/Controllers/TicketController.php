<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();

        return response()->json($tickets, 200);
    }


    public function store(TicketRequest $request)
    {
        $ticket = Ticket::create($request->all());

        return response()->json([
            'success' => 'true',
            'Data' => $ticket
        ], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket = Ticket::find($id);

        return response()->json($ticket, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TicketRequest $request, string $id)
    {
        $ticket = Ticket::find($id);
        $ticket->title = $request->title;
        $ticket->content = $request->content;
        $ticket->save;

        return response()->json([
            'success' => true,
            'data' => $ticket
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Ticket::find($id)->delete();

        return response()->json([
            'success' => true
        ], 200);
    }
}
