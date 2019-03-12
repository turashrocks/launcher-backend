<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser_subscriptionsRequest;
use App\Http\Requests\UpdateUser_subscriptionsRequest;
use App\Repositories\User_subscriptionsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class User_subscriptionsController extends AppBaseController
{
    /** @var  User_subscriptionsRepository */
    private $userSubscriptionsRepository;

    public function __construct(User_subscriptionsRepository $userSubscriptionsRepo)
    {
        $this->userSubscriptionsRepository = $userSubscriptionsRepo;
    }

    /**
     * Display a listing of the User_subscriptions.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userSubscriptionsRepository->pushCriteria(new RequestCriteria($request));
        $userSubscriptions = $this->userSubscriptionsRepository->all();

        return view('user_subscriptions.index')
            ->with('userSubscriptions', $userSubscriptions);
    }

    /**
     * Show the form for creating a new User_subscriptions.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_subscriptions.create');
    }

    /**
     * Store a newly created User_subscriptions in storage.
     *
     * @param CreateUser_subscriptionsRequest $request
     *
     * @return Response
     */
    public function store(CreateUser_subscriptionsRequest $request)
    {
        $input = $request->all();

        $userSubscriptions = $this->userSubscriptionsRepository->create($input);

        Flash::success('User Subscriptions saved successfully.');

        return redirect(route('userSubscriptions.index'));
    }

    /**
     * Display the specified User_subscriptions.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userSubscriptions = $this->userSubscriptionsRepository->findWithoutFail($id);

        if (empty($userSubscriptions)) {
            Flash::error('User Subscriptions not found');

            return redirect(route('userSubscriptions.index'));
        }

        return view('user_subscriptions.show')->with('userSubscriptions', $userSubscriptions);
    }

    /**
     * Show the form for editing the specified User_subscriptions.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userSubscriptions = $this->userSubscriptionsRepository->findWithoutFail($id);

        if (empty($userSubscriptions)) {
            Flash::error('User Subscriptions not found');

            return redirect(route('userSubscriptions.index'));
        }

        return view('user_subscriptions.edit')->with('userSubscriptions', $userSubscriptions);
    }

    /**
     * Update the specified User_subscriptions in storage.
     *
     * @param  int              $id
     * @param UpdateUser_subscriptionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUser_subscriptionsRequest $request)
    {
        $userSubscriptions = $this->userSubscriptionsRepository->findWithoutFail($id);

        if (empty($userSubscriptions)) {
            Flash::error('User Subscriptions not found');

            return redirect(route('userSubscriptions.index'));
        }

        $userSubscriptions = $this->userSubscriptionsRepository->update($request->all(), $id);

        Flash::success('User Subscriptions updated successfully.');

        return redirect(route('userSubscriptions.index'));
    }

    /**
     * Remove the specified User_subscriptions from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userSubscriptions = $this->userSubscriptionsRepository->findWithoutFail($id);

        if (empty($userSubscriptions)) {
            Flash::error('User Subscriptions not found');

            return redirect(route('userSubscriptions.index'));
        }

        $this->userSubscriptionsRepository->delete($id);

        Flash::success('User Subscriptions deleted successfully.');

        return redirect(route('userSubscriptions.index'));
    }
}
