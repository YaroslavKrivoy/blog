<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBlogTagRequest;
use App\Http\Requests\UpdateBlogTagRequest;
use App\Repositories\BlogTagRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BlogTagController extends AppBaseController
{
    /** @var  BlogTagRepository */
    private $blogTagRepository;

    public function __construct(BlogTagRepository $blogTagRepo)
    {
        $this->blogTagRepository = $blogTagRepo;
    }

    /**
     * Display a listing of the BlogTag.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $blogTags = $this->blogTagRepository->all();

        return view('blog_tags.index')
            ->with('blogTags', $blogTags);
    }

    /**
     * Show the form for creating a new BlogTag.
     *
     * @return Response
     */
    public function create()
    {
        return view('blog_tags.create');
    }

    /**
     * Store a newly created BlogTag in storage.
     *
     * @param CreateBlogTagRequest $request
     *
     * @return Response
     */
    public function store(CreateBlogTagRequest $request)
    {
        $input = $request->all();

        $blogTag = $this->blogTagRepository->create($input);

        Flash::success('Blog Tag saved successfully.');

        return redirect(route('blogTags.index'));
    }

    /**
     * Display the specified BlogTag.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $blogTag = $this->blogTagRepository->find($id);

        if (empty($blogTag)) {
            Flash::error('Blog Tag not found');

            return redirect(route('blogTags.index'));
        }

        return view('blog_tags.show')->with('blogTag', $blogTag);
    }

    /**
     * Show the form for editing the specified BlogTag.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $blogTag = $this->blogTagRepository->find($id);

        if (empty($blogTag)) {
            Flash::error('Blog Tag not found');

            return redirect(route('blogTags.index'));
        }

        return view('blog_tags.edit')->with('blogTag', $blogTag);
    }

    /**
     * Update the specified BlogTag in storage.
     *
     * @param int $id
     * @param UpdateBlogTagRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlogTagRequest $request)
    {
        $blogTag = $this->blogTagRepository->find($id);

        if (empty($blogTag)) {
            Flash::error('Blog Tag not found');

            return redirect(route('blogTags.index'));
        }

        $blogTag = $this->blogTagRepository->update($request->all(), $id);

        Flash::success('Blog Tag updated successfully.');

        return redirect(route('blogTags.index'));
    }

    /**
     * Remove the specified BlogTag from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $blogTag = $this->blogTagRepository->find($id);

        if (empty($blogTag)) {
            Flash::error('Blog Tag not found');

            return redirect(route('blogTags.index'));
        }

        $this->blogTagRepository->delete($id);

        Flash::success('Blog Tag deleted successfully.');

        return redirect(route('blogTags.index'));
    }
}
