<!DOCTYPE html>
<html lang="en">

@include('\layouts\default')

<section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/4 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Cadastrar Os</h1>
                </div>

                <form  action="/serviço/store" method="POST">
            
                @csrf
            

                
                    <div class="flex flex-wrap">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-black-900">Os</label>
                                <input type="text" id="os" name="os" value="{{old('os')}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('os')
                                <div class="text-red-400">{{ $message}}</div>
                        </div>
                            @enderror

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="preço" class="leading-7 text-sm text-black-900">Valor</label>
                                <input  type="text" id="valor" name="valor"  value="{{old('valor')}}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                            </div>
                            </div>
                           
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="quantidade" class="leading-7 text-sm text-black-900">Numero de peças</label>
                                <input type="text" id="peças" name="peças" value="{{old('peças')}}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            </div>
                            @error('encerrada')
                                <div class="text-red-400">{{ $message}}</div>
                        </div>
                            @enderror

                            <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="quantidade" class="leading-7 text-sm text-black-900">Status</label>
                                <input type="text" id="encerrada" name="encerrada" value="{{old('encerrada')}}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            </div>
                            
                        <div class="p-2 w-full">
                            <button type="submit" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Adicionar</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
    
</html>