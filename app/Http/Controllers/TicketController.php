<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Http\Resources\TicketResource;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        $tickets = Ticket::all();

        // return response()->json($tickets, 200);
        return TicketResource::collection(Ticket::all());
    }


    public function store(TicketRequest $request): JsonResponse
    {
        $ticket = Ticket::create($request->all());

        return response()->json([
            'success' => 'true',
            // 'Data' => $ticket
            'Data' => new TicketResource($ticket)
        ], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResource
    {
        $ticket = Ticket::find($id);

        // return response()->json($ticket, 200);
        return new TicketResource($ticket);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TicketRequest $request, string $id): JsonResponse
    {
        $ticket = Ticket::find($id);
        $ticket->title = $request->title;
        $ticket->content = $request->content;
        $ticket->save();

        return response()->json([
            'success' => 'true',
            'data' => new TicketResource($ticket)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Ticket::find($id)->delete();

        return response()->json([
            'success' => 'true'
        ], 200);
    }
}
