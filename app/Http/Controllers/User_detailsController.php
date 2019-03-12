<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser_detailsRequest;
use App\Http\Requests\UpdateUser_detailsRequest;
use App\Repositories\User_detailsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class User_detailsController extends AppBaseController
{
    /** @var  User_detailsRepository */
    private $userDetailsRepository;

    public function __construct(User_detailsRepository $userDetailsRepo)
    {
        $this->userDetailsRepository = $userDetailsRepo;
    }

    /**
     * Display a listing of the User_details.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userDetailsRepository->pushCriteria(new RequestCriteria($request));
        $userDetails = $this->userDetailsRepository->all();

        return view('user_details.index')
            ->with('userDetails', $userDetails);
    }

    /**
     * Show the form for creating a new User_details.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_details.create');
    }

    /**
     * Store a newly created User_details in storage.
     *
     * @param CreateUser_detailsRequest $request
     *
     * @return Response
     */
    public function store(CreateUser_detailsRequest $request)
    {
        $input = $request->all();

        $userDetails = $this->userDetailsRepository->create($input);

        Flash::success('User Details saved successfully.');

        return redirect(route('userDetails.index'));
    }

    /**
     * Display the specified User_details.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userDetails = $this->userDetailsRepository->findWithoutFail($id);

        if (empty($userDetails)) {
            Flash::error('User Details not found');

            return redirect(route('userDetails.index'));
        }

        return view('user_details.show')->with('userDetails', $userDetails);
    }

    /**
     * Show the form for editing the specified User_details.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userDetails = $this->userDetailsRepository->findWithoutFail($id);

        if (empty($userDetails)) {
            Flash::error('User Details not found');

            return redirect(route('userDetails.index'));
        }

        return view('user_details.edit')->with('userDetails', $userDetails);
    }

    /**
     * Update the specified User_details in storage.
     *
     * @param  int              $id
     * @param UpdateUser_detailsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUser_detailsRequest $request)
    {
        $userDetails = $this->userDetailsRepository->findWithoutFail($id);

        if (empty($userDetails)) {
            Flash::error('User Details not found');

            return redirect(route('userDetails.index'));
        }

        $userDetails = $this->userDetailsRepository->update($request->all(), $id);

        Flash::success('User Details updated successfully.');

        return redirect(route('userDetails.index'));
    }

    /**
     * Remove the specified User_details from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userDetails = $this->userDetailsRepository->findWithoutFail($id);

        if (empty($userDetails)) {
            Flash::error('User Details not found');

            return redirect(route('userDetails.index'));
        }

        $this->userDetailsRepository->delete($id);

        Flash::success('User Details deleted successfully.');

        return redirect(route('userDetails.index'));
    }
}
