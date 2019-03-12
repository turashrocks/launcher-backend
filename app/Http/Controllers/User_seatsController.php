<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser_seatsRequest;
use App\Http\Requests\UpdateUser_seatsRequest;
use App\Repositories\User_seatsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class User_seatsController extends AppBaseController
{
    /** @var  User_seatsRepository */
    private $userSeatsRepository;

    public function __construct(User_seatsRepository $userSeatsRepo)
    {
        $this->userSeatsRepository = $userSeatsRepo;
    }

    /**
     * Display a listing of the User_seats.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userSeatsRepository->pushCriteria(new RequestCriteria($request));
        $userSeats = $this->userSeatsRepository->all();

        return view('user_seats.index')
            ->with('userSeats', $userSeats);
    }

    /**
     * Show the form for creating a new User_seats.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_seats.create');
    }

    /**
     * Store a newly created User_seats in storage.
     *
     * @param CreateUser_seatsRequest $request
     *
     * @return Response
     */
    public function store(CreateUser_seatsRequest $request)
    {
        $input = $request->all();

        $userSeats = $this->userSeatsRepository->create($input);

        Flash::success('User Seats saved successfully.');

        return redirect(route('userSeats.index'));
    }

    /**
     * Display the specified User_seats.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userSeats = $this->userSeatsRepository->findWithoutFail($id);

        if (empty($userSeats)) {
            Flash::error('User Seats not found');

            return redirect(route('userSeats.index'));
        }

        return view('user_seats.show')->with('userSeats', $userSeats);
    }

    /**
     * Show the form for editing the specified User_seats.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userSeats = $this->userSeatsRepository->findWithoutFail($id);

        if (empty($userSeats)) {
            Flash::error('User Seats not found');

            return redirect(route('userSeats.index'));
        }

        return view('user_seats.edit')->with('userSeats', $userSeats);
    }

    /**
     * Update the specified User_seats in storage.
     *
     * @param  int              $id
     * @param UpdateUser_seatsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUser_seatsRequest $request)
    {
        $userSeats = $this->userSeatsRepository->findWithoutFail($id);

        if (empty($userSeats)) {
            Flash::error('User Seats not found');

            return redirect(route('userSeats.index'));
        }

        $userSeats = $this->userSeatsRepository->update($request->all(), $id);

        Flash::success('User Seats updated successfully.');

        return redirect(route('userSeats.index'));
    }

    /**
     * Remove the specified User_seats from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userSeats = $this->userSeatsRepository->findWithoutFail($id);

        if (empty($userSeats)) {
            Flash::error('User Seats not found');

            return redirect(route('userSeats.index'));
        }

        $this->userSeatsRepository->delete($id);

        Flash::success('User Seats deleted successfully.');

        return redirect(route('userSeats.index'));
    }
}
