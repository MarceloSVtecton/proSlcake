<!DOCTYPE html>
<html lang="en">

@include('\layouts\default')

@include('\layouts\default')

    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/4 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Editar produto</h1>
                </div>

        <form enctype="multipart/form-data" action="{{
            route('products.update', $products->id) }}" method="POST">
                
                @csrf
                @method('put')
            

                
                    <div class="flex flex-wrap">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-black-900">Nome</label>
                                <input type="text" id="nome" name="nome" value="{{ $products->nome }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('nome')
                                <div class="text-red-400">{{ $message}}</div>
                        </div>
                            @enderror

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="preço" class="leading-7 text-sm text-black-900">Preço</label>
                                <input  type="text" id="preço" name="preço"  value="{{ $products->preço }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                            </div>
                            </div>
                            @error('preço')
                                <div class="text-red-400">{{ $message}}</div>
                        </div>
                            @enderror
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="quantidade" class="leading-7 text-sm text-black-900">Quantidade</label>
                                <input type="text" id="estoque" name="estoque" value="{{ $products->estoque }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            </div>
                            @error('quantidade')
                                <div class="text-red-400">{{ $message}}</div>
                        </div>
                            @enderror
                        <div class="p-2 w-full">
                            <button type="submit" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Confirmar</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>

</html>