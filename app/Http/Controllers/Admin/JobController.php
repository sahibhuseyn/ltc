<?php

namespace App\Http\Controllers\Admin;

use App\Job;
use App\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class JobController extends Controller
{
    public function listJobs ($language_code) {
        $language_id = Language::getLanguageByCode($language_code);
        $jobs = Job::getJobsByLanguage($language_code);
        return view('admin.jobs.jobs', compact('jobs', 'language_id'));
    }

    public function edit (Job $job) {
        return view('admin.jobs.edit', compact('job'));
    }

    public function update (Job $job, Request $request) {
        $slug = str_slug($request->title);
        $exists = Job::getJobBySlug($slug);

        if (!$request->title
            || !$request->short_description
            || !$request->description
            || !$request->location) {

            Session::flash('fail', 'Please fill all the information');
            return back();
        }

        if ($request->image) {

            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/');

            $image->move($path, $filename);

            $job->image = $filename;
        }

        if (!$exists) {
            $job->title = $request->title;
            $job->slug = $slug;
            $job->short_description = $request->short_description;
            $job->description = $request->description;
            $job->location = $request->location;
            $job->update();
        } else {
            if ($exists->id == $job->id ) {
                $job->title = $request->title;
                $job->slug = $slug;
                $job->short_description = $request->short_description;
                $job->description = $request->description;
                $job->location = $request->location;
                $job->update();

            } else if ($exists) {
                Session::flash('fail', 'Job with the same name already exists');

                return back();
            }
        }

        Session::flash('success', 'Successfully updated');
        return back();

    }

    public function add ($language_id, Request $request) {
        $slug = str_slug($request->title);
        $exists = Job::getJobBySlug($slug);

        if (!$request->image) {
            Session::flash('fail', 'Please upload image');

            return back();
        } else if (!$request->title
            || !$request->short_description
            || !$request->description
            || !$request->location) {

            Session::flash('fail', 'Please fill all the information');
            return back();
        } else if ($exists) {
            Session::flash('fail', 'Job with the same name already exists');
            return back();
        }

        $job = new Job;
        $job->language_id = $language_id;
        $job->title = $request->title;
        $job->slug = $slug;
        $job->location = $request->location;
        $job->short_description = $request->short_description;
        $job->description = $request->description;

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/');

        $image->move($path, $filename);

        $job->image = $filename;

        $job->save();
        Session::flash('success', 'Successfully changed');

        return back();

    }

    public function delete (Job $job) {
        $job ->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }
}
