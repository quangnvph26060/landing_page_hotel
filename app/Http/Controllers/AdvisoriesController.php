<?php

namespace App\Http\Controllers;

use App\Models\Advisory;
use App\Services\BaseQuery;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdvisoriesController extends Controller
{

    //
    protected $queryBuilder;

    public function __construct()
    {
        $this->queryBuilder = new BaseQuery(Advisory::class);
    }
    public function index()
    {
        if (request()->ajax()) {
            $columns    = ['id', 'name', 'email', 'phone', 'address'];

            $query      = $this->queryBuilder->buildQuery(
                $columns,
                [],
                [],
                request()
            );

            return $this->queryBuilder->processDataTable($query, function ($dataTable) {
                return $dataTable;
            });
        }
        return view('backend.advisory.index');
    }

    public function registerAdvisories(Request $request)
    {
        $data = $request->except('_token');

        $exists = Advisory::where(function ($query) use ($data) {
            $query->where('email', $data['email'])
                ->orWhere('phone', $data['phone']);
        })
            ->where('created_at', '>=', Carbon::now()->subMinutes(30))
            ->exists();

        if ($exists) {
            sessionFlash('error', 'Bạn đã đăng ký tư vấn trong vòng 15 phút gần đây. Vui lòng thử lại sau.');
            return back()->withInput();
        }

        // Nếu không trùng, lưu dữ liệu
        Advisory::create($data);
        sessionFlash('success', 'Đăng ký tư vấn thành công !');
        return back()->withInput();
    }
}
