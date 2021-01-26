<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getPayments()
    {
        $pagamenti = [
            ['id' => '1', 'status' => 'pending', 'price' => '1000.00', 'prenotazione_id' => '1', 'pagante_id' => '3', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '2', 'status' => 'rejected', 'price' => '773.00', 'prenotazione_id' => '2', 'pagante_id' => '23', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '3', 'status' => 'accepted', 'price' => '869.00', 'prenotazione_id' => '3', 'pagante_id' => '10', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '4', 'status' => 'pending', 'price' => '671.00', 'prenotazione_id' => '4', 'pagante_id' => '6', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '5', 'status' => 'accepted', 'price' => '117.00', 'prenotazione_id' => '5', 'pagante_id' => '16', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '6', 'status' => 'accepted', 'price' => '59.00', 'prenotazione_id' => '6', 'pagante_id' => '4', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '7', 'status' => 'pending', 'price' => '993.00', 'prenotazione_id' => '7', 'pagante_id' => '6', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '8', 'status' => 'rejected', 'price' => '512.00', 'prenotazione_id' => '8', 'pagante_id' => '28', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '9', 'status' => 'pending', 'price' => '389.00', 'prenotazione_id' => '9', 'pagante_id' => '13', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '10', 'status' => 'pending', 'price' => '332.00', 'prenotazione_id' => '10', 'pagante_id' => '25', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '11', 'status' => 'accepted', 'price' => '67.00', 'prenotazione_id' => '11', 'pagante_id' => '5', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '12', 'status' => 'rejected', 'price' => '154.00', 'prenotazione_id' => '12', 'pagante_id' => '6', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '13', 'status' => 'accepted', 'price' => '434.00', 'prenotazione_id' => '13', 'pagante_id' => '4', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '14', 'status' => 'accepted', 'price' => '562.00', 'prenotazione_id' => '14', 'pagante_id' => '30', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '15', 'status' => 'pending', 'price' => '614.00', 'prenotazione_id' => '15', 'pagante_id' => '6', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '16', 'status' => 'pending', 'price' => '222.00', 'prenotazione_id' => '16', 'pagante_id' => '11', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '17', 'status' => 'accepted', 'price' => '152.00', 'prenotazione_id' => '17', 'pagante_id' => '25', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '18', 'status' => 'pending', 'price' => '777.00', 'prenotazione_id' => '18', 'pagante_id' => '30', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '19', 'status' => 'accepted', 'price' => '822.00', 'prenotazione_id' => '19', 'pagante_id' => '7', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '20', 'status' => 'pending', 'price' => '554.00', 'prenotazione_id' => '20', 'pagante_id' => '26', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '21', 'status' => 'accepted', 'price' => '416.00', 'prenotazione_id' => '21', 'pagante_id' => '16', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '22', 'status' => 'accepted', 'price' => '666.00', 'prenotazione_id' => '22', 'pagante_id' => '28', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '23', 'status' => 'pending', 'price' => '370.00', 'prenotazione_id' => '23', 'pagante_id' => '16', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '24', 'status' => 'pending', 'price' => '647.00', 'prenotazione_id' => '24', 'pagante_id' => '9', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '25', 'status' => 'pending', 'price' => '106.00', 'prenotazione_id' => '25', 'pagante_id' => '29', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '26', 'status' => 'rejected', 'price' => '609.00', 'prenotazione_id' => '26', 'pagante_id' => '19', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '27', 'status' => 'pending', 'price' => '508.00', 'prenotazione_id' => '27', 'pagante_id' => '5', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '28', 'status' => 'pending', 'price' => '82.00', 'prenotazione_id' => '28', 'pagante_id' => '28', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '29', 'status' => 'rejected', 'price' => '88.00', 'prenotazione_id' => '29', 'pagante_id' => '21', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '30', 'status' => 'pending', 'price' => '991.00', 'prenotazione_id' => '30', 'pagante_id' => '21', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
        ];
        return view('pages.pagamenti', compact('pagamenti'));
    }
    public function getPending()
    {
        $pagamenti = [
            ['id' => '1', 'status' => 'pending', 'price' => '1000.00', 'prenotazione_id' => '1', 'pagante_id' => '3', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '2', 'status' => 'rejected', 'price' => '773.00', 'prenotazione_id' => '2', 'pagante_id' => '23', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '3', 'status' => 'accepted', 'price' => '869.00', 'prenotazione_id' => '3', 'pagante_id' => '10', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '4', 'status' => 'pending', 'price' => '671.00', 'prenotazione_id' => '4', 'pagante_id' => '6', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '5', 'status' => 'accepted', 'price' => '117.00', 'prenotazione_id' => '5', 'pagante_id' => '16', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '6', 'status' => 'accepted', 'price' => '59.00', 'prenotazione_id' => '6', 'pagante_id' => '4', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '7', 'status' => 'pending', 'price' => '993.00', 'prenotazione_id' => '7', 'pagante_id' => '6', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '8', 'status' => 'rejected', 'price' => '512.00', 'prenotazione_id' => '8', 'pagante_id' => '28', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '9', 'status' => 'pending', 'price' => '389.00', 'prenotazione_id' => '9', 'pagante_id' => '13', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '10', 'status' => 'pending', 'price' => '332.00', 'prenotazione_id' => '10', 'pagante_id' => '25', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '11', 'status' => 'accepted', 'price' => '67.00', 'prenotazione_id' => '11', 'pagante_id' => '5', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '12', 'status' => 'rejected', 'price' => '154.00', 'prenotazione_id' => '12', 'pagante_id' => '6', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '13', 'status' => 'accepted', 'price' => '434.00', 'prenotazione_id' => '13', 'pagante_id' => '4', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '14', 'status' => 'accepted', 'price' => '562.00', 'prenotazione_id' => '14', 'pagante_id' => '30', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '15', 'status' => 'pending', 'price' => '614.00', 'prenotazione_id' => '15', 'pagante_id' => '6', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '16', 'status' => 'pending', 'price' => '222.00', 'prenotazione_id' => '16', 'pagante_id' => '11', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '17', 'status' => 'accepted', 'price' => '152.00', 'prenotazione_id' => '17', 'pagante_id' => '25', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '18', 'status' => 'pending', 'price' => '777.00', 'prenotazione_id' => '18', 'pagante_id' => '30', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '19', 'status' => 'accepted', 'price' => '822.00', 'prenotazione_id' => '19', 'pagante_id' => '7', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '20', 'status' => 'pending', 'price' => '554.00', 'prenotazione_id' => '20', 'pagante_id' => '26', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '21', 'status' => 'accepted', 'price' => '416.00', 'prenotazione_id' => '21', 'pagante_id' => '16', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '22', 'status' => 'accepted', 'price' => '666.00', 'prenotazione_id' => '22', 'pagante_id' => '28', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '23', 'status' => 'pending', 'price' => '370.00', 'prenotazione_id' => '23', 'pagante_id' => '16', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '24', 'status' => 'pending', 'price' => '647.00', 'prenotazione_id' => '24', 'pagante_id' => '9', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '25', 'status' => 'pending', 'price' => '106.00', 'prenotazione_id' => '25', 'pagante_id' => '29', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '26', 'status' => 'rejected', 'price' => '609.00', 'prenotazione_id' => '26', 'pagante_id' => '19', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '27', 'status' => 'pending', 'price' => '508.00', 'prenotazione_id' => '27', 'pagante_id' => '5', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '28', 'status' => 'pending', 'price' => '82.00', 'prenotazione_id' => '28', 'pagante_id' => '28', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '29', 'status' => 'rejected', 'price' => '88.00', 'prenotazione_id' => '29', 'pagante_id' => '21', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
            ['id' => '30', 'status' => 'pending', 'price' => '991.00', 'prenotazione_id' => '30', 'pagante_id' => '21', 'created_at' => '2018-05-28 13:53:45', 'updated_at' => '2018-05-28 13:53:45'],
        ];
        return view('pages.pending', compact('pagamenti'));
    }
}
