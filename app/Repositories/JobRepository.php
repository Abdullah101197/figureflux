<?php


namespace App\Repositories;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class JobRepository extends BaseRepository
{

    public $fieldSearchable = [
        'title',
        'Description'

    ];

    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    public function model()
    {
        return Job::class;
    }



       public function store($input): bool
    {
        try {
            DB::beginTransaction();

            $job = Job::create($input);



            DB::commit();

            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }



    public function update($input, $id)
    {
        try {
            DB::beginTransaction();

            $Job = Job::find($id);
            $Job->update($input);

            DB::commit();

            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }

}
