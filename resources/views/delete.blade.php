<div class="fixed z-10 inset-0 invisible overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="delete{{ $user->name }}">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                              DELETE
                            </h3>
                            {{-- <div class="bg-gray-800 border border-black-500 text-slate-200 px-4 py-3 rounded relative" role="alert">
                              <span class="block sm:inline">Welcome back! Mr. {{ Auth::user()->name }}</span>
                            </div> --}}
                        <div class="flex items-center justify-center bg-gray-100">
                          <form action="{{ url('delete', $user->id) }}" method="POST">
                             @csrf
                             @method('DELETE')
                             <div class="mt-4">
                                 <div>
                                     <label class="block" for="Name">Name {{ $user->name }}"<label>
                                 </div>
                                 <div class="mt-4">
                                     <label class="block" for="email">Email {{ $user->email }}<label>
                                 </div>

                    </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" class="modalClose mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                 <i>
                   Cancel
                 </i>
                </button>
                <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                 <i class="fa fa-save">
                   Delete
                 </i>
                </button>
            </div>
            </form>
          {{-- @endif --}}
          </div>
        </div>
    </div>
</div>
</form>
<script type="text/javascript">
$(document).ready(function () {
    $('.modalOpenOpen').on('click', function(e){
        $('#delete{{ $user->name }}').removeClass('invisible');
    });
    $('.modalClose').on('click', function(e){
        $('#delete{{ $user->name }}').addClass('invisible');
    });
});
</script>
