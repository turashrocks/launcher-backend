<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAppRequest;
use App\Http\Requests\UpdateAppRequest;
use App\Repositories\AppRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AppController extends AppBaseController
{
    /** @var  AppRepository */
    private $appRepository;

    public function __construct(AppRepository $appRepo)
    {
        $this->appRepository = $appRepo;
    }

    /**
     * Display a listing of the App.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->appRepository->pushCriteria(new RequestCriteria($request));
        $apps = $this->appRepository->all();

        return view('apps.index')
            ->with('apps', $apps);
    }

    /**
     * Show the form for creating a new App.
     *
     * @return Response
     */
    public function create()
    {
        return view('apps.create');
    }

    /**
     * Store a newly created App in storage.
     *
     * @param CreateAppRequest $request
     *
     * @return Response
     */
    public function store(CreateAppRequest $request)
    {
        $input = $request->all();

        $app = $this->appRepository->create($input);

        Flash::success('App saved successfully.');

        return redirect(route('apps.index'));
    }

    /**
     * Display the specified App.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $app = $this->appRepository->findWithoutFail($id);

        if (empty($app)) {
            Flash::error('App not found');

            return redirect(route('apps.index'));
        }

        return view('apps.show')->with('app', $app);
    }

    /**
     * Show the form for editing the specified App.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $app = $this->appRepository->findWithoutFail($id);

        if (empty($app)) {
            Flash::error('App not found');

            return redirect(route('apps.index'));
        }

        return view('apps.edit')->with('app', $app);
    }

    /**
     * Update the specified App in storage.
     *
     * @param  int              $id
     * @param UpdateAppRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAppRequest $request)
    {
        $app = $this->appRepository->findWithoutFail($id);

        if (empty($app)) {
            Flash::error('App not found');

            return redirect(route('apps.index'));
        }

        $app = $this->appRepository->update($request->all(), $id);

        Flash::success('App updated successfully.');

        return redirect(route('apps.index'));
    }

    /**
     * Remove the specified App from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $app = $this->appRepository->findWithoutFail($id);

        if (empty($app)) {
            Flash::error('App not found');

            return redirect(route('apps.index'));
        }

        $this->appRepository->delete($id);

        Flash::success('App deleted successfully.');

        return redirect(route('apps.index'));
    }
}
