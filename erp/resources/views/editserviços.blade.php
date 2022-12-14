<!DOCTYPE html>
<html lang="en">

@include('\layouts\default')



    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/4 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Apontar</h1>
                </div>

            <form enctype="multipart/form-data" action="{{
            route('serviço.update', $serviço->id) }}" method="POST">
                
                @csrf
                @method('put')
            

                
                    <div class="flex flex-wrap">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-black-900">Os</label>
                                <input type="text" id="os" name="os" value="{{ $serviço->os }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                           

                       
                      
                          
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="funilaria" class="leading-7 text-sm text-black-900">Funilaria</label>
                                <input type="text" id="funilaria" name="funilaria" value="{{ $serviço->funilaria }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                          
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="pintura" class="leading-7 text-sm text-black-900">Pintura</label>
                                <input type="text" id="pintura" name="pintura" value="{{ $serviço->pintura }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                          
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="preparação" class="leading-7 text-sm text-black-900">Preparação</label>
                                <input type="text" id="preparação" name="preparação" value="{{ $serviço->preparação }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="montagem" class="leading-7 text-sm text-black-900">Montagem</label>
                                <input type="text" id="montagem" name="montagem" value="{{ $serviço->montagem }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="polimento" class="leading-7 text-sm text-black-900">Polimento</label>
                                <input type="text" id="polimento" name="polimento" value="{{ $serviço->polimento }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="encerrada" class="leading-7 text-sm text-black-900">Status</label>
                                <input type="text" id="encerrada" name="encerrada" value="{{ $serviço->encerrada }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="peças" class="leading-7 text-sm text-black-900">Peças</label>
                                <input type="text" id="peças" name="peças" value="{{ $serviço->peças }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                          
                          
                          
                          
                          
                        <div class="p-2 w-full">
                            <button type="submit" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Confirmar</button>
                        </div>

                    </div>
            </form>
            </div>
        </div>
    </section>

</html>