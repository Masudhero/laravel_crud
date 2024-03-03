@if(session()->get('success'))
                <div class="alert alert-success py-2"><strong>success::</strong>{{session()->get('success')}}</div>
                @elseif (session()->get('warning'))
                <div class="alert alert-warning py-2"><strong>warning::</strong>{{session()->get('warning')}}</div>
                @elseif (session()->get('error'))
                <div class="alert alert-danger py-2"><strong>error::</strong>{{session()->get('error')}}</div>
        @endif
