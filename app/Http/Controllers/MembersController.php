<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    public function members(Request $request, $name)
    {
        die($name);

    }

    public function newMember(Request $request)
    {
        $this->validate($request, [
            'company_name' => 'required',
            'address' => 'required',
            'pib' => 'required',
            'mb' => 'required',
            'postal_code' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'location' => 'required',
            'contact_name' => 'required',
            'job_code' => 'required',
            'package' => 'required',
        ]);

        $sql = DB::connection()->getPdo();
        $query = $sql->prepare("
           INSERT INTO requested_memberships (company_name, address, pib, mb, postal_code, telephone, email, location, contact_name, job_code, package, requested_on, status) VALUES 
           (:company_name, :address, :pib, :mb, :postal_code, :telephone, :email, :location, :contact_name, :job_code, :package, NOW(), 'requested')
            
        ");

        $query->bindParam(':company_name', $request->get('company_name'), \PDO::PARAM_STR);
        $query->bindParam(':address', $request->get('address'), \PDO::PARAM_STR);
        $query->bindParam(':pib', $request->get('pib'), \PDO::PARAM_INT);
        $query->bindParam(':mb', $request->get('mb'), \PDO::PARAM_INT);
        $query->bindParam(':postal_code', $request->get('postal_code'), \PDO::PARAM_INT);
        $query->bindParam(':telephone', $request->get('telephone'), \PDO::PARAM_INT);
        $query->bindParam(':email', $request->get('email'), \PDO::PARAM_STR);
        $query->bindParam(':location', $request->get('location'), \PDO::PARAM_STR);
        $query->bindParam(':contact_name', $request->get('contact_name'), \PDO::PARAM_STR);
        $query->bindParam(':job_code', $request->get('job_code'), \PDO::PARAM_STR);
        $query->bindParam(':package', $request->get('package'), \PDO::PARAM_STR);

        $query->execute();
    }
}
