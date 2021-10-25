<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDota2PlayerInfoRequest;
use App\Http\Requests\UpdateDota2PlayerInfoRequest;
use App\Repositories\Dota2PlayerInfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Dota2PlayerInfoController extends AppBaseController
{
    /** @var  Dota2PlayerInfoRepository */
    private $dota2PlayerInfoRepository;

    public function __construct(Dota2PlayerInfoRepository $dota2PlayerInfoRepo)
    {
        $this->dota2PlayerInfoRepository = $dota2PlayerInfoRepo;
    }

    /**
     * Display a listing of the Dota2PlayerInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $dota2PlayerInfos = $this->dota2PlayerInfoRepository->all();

        return view('dota2_player_infos.index')
            ->with('dota2PlayerInfos', $dota2PlayerInfos);
    }

    /**
     * Show the form for creating a new Dota2PlayerInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('dota2_player_infos.create');
    }

    /**
     * Store a newly created Dota2PlayerInfo in storage.
     *
     * @param CreateDota2PlayerInfoRequest $request
     *
     * @return Response
     */
    public function store(CreateDota2PlayerInfoRequest $request)
    {
        $input = $request->all();

        $dota2PlayerInfo = $this->dota2PlayerInfoRepository->create($input);

        Flash::success('Dota2 Player Info saved successfully.');

        return redirect(route('dota2PlayerInfos.index'));
    }

    /**
     * Display the specified Dota2PlayerInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dota2PlayerInfo = $this->dota2PlayerInfoRepository->find($id);

        if (empty($dota2PlayerInfo)) {
            Flash::error('Dota2 Player Info not found');

            return redirect(route('dota2PlayerInfos.index'));
        }

        return view('dota2_player_infos.show')->with('dota2PlayerInfo', $dota2PlayerInfo);
    }

    /**
     * Show the form for editing the specified Dota2PlayerInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dota2PlayerInfo = $this->dota2PlayerInfoRepository->find($id);

        if (empty($dota2PlayerInfo)) {
            Flash::error('Dota2 Player Info not found');

            return redirect(route('dota2PlayerInfos.index'));
        }

        return view('dota2_player_infos.edit')->with('dota2PlayerInfo', $dota2PlayerInfo);
    }

    /**
     * Update the specified Dota2PlayerInfo in storage.
     *
     * @param int $id
     * @param UpdateDota2PlayerInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDota2PlayerInfoRequest $request)
    {
        $dota2PlayerInfo = $this->dota2PlayerInfoRepository->find($id);

        if (empty($dota2PlayerInfo)) {
            Flash::error('Dota2 Player Info not found');

            return redirect(route('dota2PlayerInfos.index'));
        }

        $dota2PlayerInfo = $this->dota2PlayerInfoRepository->update($request->all(), $id);

        Flash::success('Dota2 Player Info updated successfully.');

        return redirect(route('dota2PlayerInfos.index'));
    }

    /**
     * Remove the specified Dota2PlayerInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dota2PlayerInfo = $this->dota2PlayerInfoRepository->find($id);

        if (empty($dota2PlayerInfo)) {
            Flash::error('Dota2 Player Info not found');

            return redirect(route('dota2PlayerInfos.index'));
        }

        $this->dota2PlayerInfoRepository->delete($id);

        Flash::success('Dota2 Player Info deleted successfully.');

        return redirect(route('dota2PlayerInfos.index'));
    }
}
