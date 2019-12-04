<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBlogArticleRequest;
use App\Http\Requests\UpdateBlogArticleRequest;
use App\Repositories\BlogArticleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BlogArticleController extends AppBaseController
{
    /** @var  BlogArticleRepository */
    private $blogArticleRepository;

    public function __construct(BlogArticleRepository $blogArticleRepo)
    {
        $this->blogArticleRepository = $blogArticleRepo;
    }

    /**
     * Display a listing of the BlogArticle.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $blogArticles = $this->blogArticleRepository->all();

        return view('blog_articles.index')
            ->with('blogArticles', $blogArticles);
    }

    /**
     * Show the form for creating a new BlogArticle.
     *
     * @return Response
     */
    public function create()
    {
        return view('blog_articles.create');
    }

    /**
     * Store a newly created BlogArticle in storage.
     *
     * @param CreateBlogArticleRequest $request
     *
     * @return Response
     */
    public function store(CreateBlogArticleRequest $request)
    {
        $input = $request->all();

        $blogArticle = $this->blogArticleRepository->create($input);

        Flash::success('Blog Article saved successfully.');

        return redirect(route('blogArticles.index'));
    }

    /**
     * Display the specified BlogArticle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $blogArticle = $this->blogArticleRepository->find($id);

        if (empty($blogArticle)) {
            Flash::error('Blog Article not found');

            return redirect(route('blogArticles.index'));
        }

        return view('blog_articles.show')->with('blogArticle', $blogArticle);
    }

    /**
     * Show the form for editing the specified BlogArticle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $blogArticle = $this->blogArticleRepository->find($id);

        if (empty($blogArticle)) {
            Flash::error('Blog Article not found');

            return redirect(route('blogArticles.index'));
        }

        return view('blog_articles.edit')->with('blogArticle', $blogArticle);
    }

    /**
     * Update the specified BlogArticle in storage.
     *
     * @param int $id
     * @param UpdateBlogArticleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlogArticleRequest $request)
    {
        $blogArticle = $this->blogArticleRepository->find($id);

        if (empty($blogArticle)) {
            Flash::error('Blog Article not found');

            return redirect(route('blogArticles.index'));
        }

        $blogArticle = $this->blogArticleRepository->update($request->all(), $id);

        Flash::success('Blog Article updated successfully.');

        return redirect(route('blogArticles.index'));
    }

    /**
     * Remove the specified BlogArticle from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $blogArticle = $this->blogArticleRepository->find($id);

        if (empty($blogArticle)) {
            Flash::error('Blog Article not found');

            return redirect(route('blogArticles.index'));
        }

        $this->blogArticleRepository->delete($id);

        Flash::success('Blog Article deleted successfully.');

        return redirect(route('blogArticles.index'));
    }
}
