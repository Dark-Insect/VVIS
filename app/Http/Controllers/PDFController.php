<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Vehicle;
use App\Models\Drivers;
use App\Models\Moto;
use App\Models\Traffic;
use App\Models\Conforme;
use PDF;

class PDFController extends Controller
{
    public function exportPDFowner()
    {

        $owner_details = Owner::all();
        $pdf = PDF::loadView('dashboards.staff.owner_details.owner_details_pdf', array('owner_details' => $owner_details))
            ->setPaper('a4', 'landscape');
        return $pdf->download('Owner Details.pdf');
    }

    public function exportPDFvehicle()
    {

        $vehicle_information = Vehicle::all();
        $pdf = PDF::loadView('dashboards.staff.vehicle_information.vehicle_information_pdf', array('vehicle_information' => $vehicle_information));
        return $pdf->download('Vehicle Information.pdf');
    }
    public function exportPDFdriver()
    {

        $drivers_information = Drivers::all();
        $pdf = PDF::loadView('dashboards.staff.drivers_information.drivers_information_pdf', array('drivers_information' => $drivers_information))
            ->setPaper('a4', 'landscape');
        return $pdf->download('Drivers Information.pdf');
    }
    public function exportPDFmoto()
    {

        $moto_vehicle = Moto::all();
        $pdf = PDF::loadView('dashboards.staff.moto_vehicle.moto_vehicle_pdf', array('moto_vehicle' => $moto_vehicle))
            ->setPaper('a4', 'landscape');
        return $pdf->download('Moto Vehicle Impounding Receipt.pdf');
    }
    public function exportPDFtraffic()
    {

        $traffic_violation = Traffic::all();
        $pdf = PDF::loadView('dashboards.staff.traffic_violation.traffic_violation_pdf', array('traffic_violation' => $traffic_violation))
            ->setPaper('a4', 'landscape');
        return $pdf->download('Traffic Violation Citation Ticket.pdf');
    }
    public function exportPDFconforme()
    {

        $conforme = Conforme::all();
        $pdf = PDF::loadView('dashboards.staff.conforme.conforme_pdf', array('conforme' => $conforme))
            ->setPaper('a4', 'landscape');
        return $pdf->download('Conforme.pdf');
    }

    public function motoTicket(Request $request, $id){

        $moto_vehicle = Moto::find($id);
        $pdf = PDF::loadView('dashboards.staff.moto_vehicle.moto_ticket_pdf', array('moto_vehicle' => $moto_vehicle))
        ->setPaper('letter', 'portrait');
    return $pdf->download('Motor Vehicle Impounding Receipt.pdf');
    }

    public function trafficTicket(Request $request, $id){
        $traffic_violation = Traffic::find($id);
        $pdf = PDF::loadView('dashboards.staff.traffic_violation.traffic_violation_ticket', array('traffic_violation' => $traffic_violation))
        ->setPaper('letter', 'portrait');
    return $pdf->download('Traffic Violation Citation Ticket.pdf');
    }

    public function client_moto(Request $request, $id){
        $moto_vehicle = Moto::find($id);
        $pdf = PDF::loadView('dashboards.client.client_moto_pdf', array('moto_vehicle' => $moto_vehicle))
            ->setPaper('a4', 'landscape');
        return $pdf->download('Moto Vehicle Impounding Receipt.pdf');
    }

    public function client_traffic(Request $request, $id){
        $traffic_violation = Traffic::find($id);
        $pdf = PDF::loadView('dashboards.client.client_traffic_pdf', array('traffic_violation' => $traffic_violation))
        ->setPaper('a4', 'portrait');
    return $pdf->download('Traffic Violation Citation Ticket.pdf');
      }
    }

