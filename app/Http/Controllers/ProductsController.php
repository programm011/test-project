<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Prettus\Validator\Exceptions\ValidatorException;

class ProductsController extends Controller
{
    public function __construct(protected ProductService $service) { }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $products = $this->service->index();

        return view('products.index', compact('products'));
    }


    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return \view('products.create');
    }

    /**
     * @param ProductRequest $request
     *
     * @return RedirectResponse
     * @throws ValidatorException
     */
    public function store(ProductRequest $request)
    {
        $this->service->create($request);

        return to_route('products.index');
    }

    /**
     * @param Product $product
     *
     * @return Application|Factory|View
     */
    public function show(Product $product)
    {
        return \view('products.show', compact('product'));
    }


    /**
     * @param Product $product
     *
     * @return Application|Factory|View
     */
    public function edit(Product $product)
    {
        return \view('products.update', compact('product'));
    }

    /**
     * @param ProductRequest $request
     * @param Product $product
     *
     * @return RedirectResponse
     * @throws ValidatorException
     */
    public function update(ProductRequest $request, Product $product)
    {
        $this->service->update($product->id, $request);

        return to_route('products.index');
    }

    /**
     * @param Product $product
     *
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Product $product)
    {
        $this->service->delete($product->id);

        return to_route('products.index');
    }
}
