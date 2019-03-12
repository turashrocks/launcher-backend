<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBuildRequest;
use App\Http\Requests\UpdateBuildRequest;
use App\Repositories\BuildRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BuildController extends AppBaseController
{
    /** @var  BuildRepository */
    private $buildRepository;

    public function __construct(BuildRepository $buildRepo)
    {
        $this->buildRepository = $buildRepo;
    }

    /**
     * Display a listing of the Build.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->buildRepository->pushCriteria(new RequestCriteria($request));
        $builds = $this->buildRepository->all();

        return view('builds.index')
            ->with('builds', $builds);
    }

    /**
     * Show the form for creating a new Build.
     *
     * @return Response
     */
    public function create()
    {
        return view('builds.create');
    }

    /**
     * Store a newly created Build in storage.
     *
     * @param CreateBuildRequest $request
     *
     * @return Response
     */
    public function store(CreateBuildRequest $request)
    {
        $input = $request->all();

        $build = $this->buildRepository->create($input);

        Flash::success('Build saved successfully.');

        return redirect(route('builds.index'));
    }

    /**
     * Display the specified Build.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $build = $this->buildRepository->findWithoutFail($id);

        if (empty($build)) {
            Flash::error('Build not found');

            return redirect(route('builds.index'));
        }

        return view('builds.show')->with('build', $build);
    }

    /**
     * Show the form for editing the specified Build.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $build = $this->buildRepository->findWithoutFail($id);

        if (empty($build)) {
            Flash::error('Build not found');

            return redirect(route('builds.index'));
        }

        return view('builds.edit')->with('build', $build);
    }

    /**
     * Update the specified Build in storage.
     *
     * @param  int              $id
     * @param UpdateBuildRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBuildRequest $request)
    {
        $build = $this->buildRepository->findWithoutFail($id);

        if (empty($build)) {
            Flash::error('Build not found');

            return redirect(route('builds.index'));
        }

        $build = $this->buildRepository->update($request->all(), $id);

        Flash::success('Build updated successfully.');

        return redirect(route('builds.index'));
    }

    /**
     * Remove the specified Build from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $build = $this->buildRepository->findWithoutFail($id);

        if (empty($build)) {
            Flash::error('Build not found');

            return redirect(route('builds.index'));
        }

        $this->buildRepository->delete($id);

        Flash::success('Build deleted successfully.');

        return redirect(route('builds.index'));
    }
}
