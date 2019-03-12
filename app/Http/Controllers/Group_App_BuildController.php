<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGroup_App_BuildRequest;
use App\Http\Requests\UpdateGroup_App_BuildRequest;
use App\Repositories\Group_App_BuildRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Group_App_BuildController extends AppBaseController
{
    /** @var  Group_App_BuildRepository */
    private $groupAppBuildRepository;

    public function __construct(Group_App_BuildRepository $groupAppBuildRepo)
    {
        $this->groupAppBuildRepository = $groupAppBuildRepo;
    }

    /**
     * Display a listing of the Group_App_Build.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->groupAppBuildRepository->pushCriteria(new RequestCriteria($request));
        $groupAppBuilds = $this->groupAppBuildRepository->all();

        return view('group__app__builds.index')
            ->with('groupAppBuilds', $groupAppBuilds);
    }

    /**
     * Show the form for creating a new Group_App_Build.
     *
     * @return Response
     */
    public function create()
    {
        return view('group__app__builds.create');
    }

    /**
     * Store a newly created Group_App_Build in storage.
     *
     * @param CreateGroup_App_BuildRequest $request
     *
     * @return Response
     */
    public function store(CreateGroup_App_BuildRequest $request)
    {
        $input = $request->all();

        $groupAppBuild = $this->groupAppBuildRepository->create($input);

        Flash::success('Group  App  Build saved successfully.');

        return redirect(route('groupAppBuilds.index'));
    }

    /**
     * Display the specified Group_App_Build.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $groupAppBuild = $this->groupAppBuildRepository->findWithoutFail($id);

        if (empty($groupAppBuild)) {
            Flash::error('Group  App  Build not found');

            return redirect(route('groupAppBuilds.index'));
        }

        return view('group__app__builds.show')->with('groupAppBuild', $groupAppBuild);
    }

    /**
     * Show the form for editing the specified Group_App_Build.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $groupAppBuild = $this->groupAppBuildRepository->findWithoutFail($id);

        if (empty($groupAppBuild)) {
            Flash::error('Group  App  Build not found');

            return redirect(route('groupAppBuilds.index'));
        }

        return view('group__app__builds.edit')->with('groupAppBuild', $groupAppBuild);
    }

    /**
     * Update the specified Group_App_Build in storage.
     *
     * @param  int              $id
     * @param UpdateGroup_App_BuildRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGroup_App_BuildRequest $request)
    {
        $groupAppBuild = $this->groupAppBuildRepository->findWithoutFail($id);

        if (empty($groupAppBuild)) {
            Flash::error('Group  App  Build not found');

            return redirect(route('groupAppBuilds.index'));
        }

        $groupAppBuild = $this->groupAppBuildRepository->update($request->all(), $id);

        Flash::success('Group  App  Build updated successfully.');

        return redirect(route('groupAppBuilds.index'));
    }

    /**
     * Remove the specified Group_App_Build from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $groupAppBuild = $this->groupAppBuildRepository->findWithoutFail($id);

        if (empty($groupAppBuild)) {
            Flash::error('Group  App  Build not found');

            return redirect(route('groupAppBuilds.index'));
        }

        $this->groupAppBuildRepository->delete($id);

        Flash::success('Group  App  Build deleted successfully.');

        return redirect(route('groupAppBuilds.index'));
    }
}
