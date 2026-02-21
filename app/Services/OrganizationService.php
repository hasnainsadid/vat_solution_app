<?php 

namespace App\Services;
use App\Models\Organization;

class OrganizationService
{
    public function index()
    {
        return Organization::all();
    }

    public function store($request)
    {
        $organization = new Organization();
        $organization->name = $request->name;
        $organization->address = $request->address;
        $organization->bin_no = $request->bin_no;
        $organization->type = $request->type;
        $organization->save();

        return $organization;
    }

    public function update($request, Organization $organization)
    {
        $organization->name = $request->name;
        $organization->address = $request->address;
        $organization->bin_no = $request->bin_no;
        $organization->type = $request->type;

        $organization->save();

        return $organization;
    }

    public function destroy(Organization $organization)
    {
        return $organization->delete();
    }
}