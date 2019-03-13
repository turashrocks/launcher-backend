<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAppRequest;
use App\Http\Requests\UpdateAppRequest;
use App\Repositories\AppRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\App;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Build;

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
        // $apps = $this->appRepository->all();
        $apps = Build::join('apps','builds.id','=','apps.build_id')->select('apps.name as app_name','apps.description as app_description','builds.name as build_name')->get();


         $builds = Build::all();

        return view('apps.index')
            ->with('apps', $apps)->with('builds',$builds);
    }

    /**
     * Show the form for creating a new App.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $this->appRepository->pushCriteria(new RequestCriteria($request));
        $app = $this->appRepository->all();

        $builds=Build::all();
        return view('apps.create')
        ->with('app', $app)
        ->with('builds', $builds);
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
       // $build=Build::all();

       // $app = $this->appRepository->create($input);
        //dd($request ->checked);
       
        foreach ($input['checked'] as $checked)
        {

             $data =array('name'=>$input['name'],'description'=>$input['description'],'build_id'=>$checked);

               App::insert($data);
        } 


        


       //  $app = new App;
       //  $app->name = $request->name;
       //  $app->description = $request->description;
       //  $app->build_id = $input['checked'];

       // // $app->$build['id'] = implode(",",$request->checked);
       //  $app->save();
       //  //Flash::success('App saved successfully.');

        return redirect(route('apps.index'))->with('builds', $builds);;
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
        $builds = Build::all();

        return view('apps.show')->with('app', $app)->with('builds',$builds);
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

        $builds=Build::all();

        return view('apps.edit')
        ->with('app', $app)
        ->with('builds', $builds);
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
