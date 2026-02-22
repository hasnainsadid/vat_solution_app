<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrganizationRequest;
use App\Models\Organization;
use App\Services\OrganizationService;

class OrganizationController extends Controller
{
    private $organizationService;

    /**
     * OrganizationController constructor.
     *
     * @param OrganizationService $organizationService
     */
    public function __construct(OrganizationService $organizationService)
    {
        $this->organizationService = $organizationService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizations = $this->organizationService->index();
        return view('backend.pages.organization.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.organization.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrganizationRequest $request)
    {
        $this->organizationService->store($request);
        notify()->success('Organization has been created successfully.');
        return redirect()->route('organizations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization $organization)
    {
        $this->organizationService->show($organization);
        return view('backend.pages.organization.show', compact('organization'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization $organization)
    {
        return view('backend.pages.organization.edit', compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrganizationRequest $request, Organization $organization)
    {
        $this->organizationService->update($request, $organization);
        notify()->success('Organization has been updated successfully.');
        return redirect()->route('organizations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        $this->organizationService->destroy($organization);
        notify()->success('Organization has been deleted successfully.');
        return redirect()->route('organizations.index');
    }
}
