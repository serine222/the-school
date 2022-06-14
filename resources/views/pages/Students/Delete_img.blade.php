<!-- Deleted inFormation Student -->
<<<<<<< HEAD
<div class="modal fade" id="Delete_img{{$attachment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    {{trans('Students_trans.Delete_attachment')}}</h5>
=======
<div class="modal fade" id="Delete_img{{$attachment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">{{trans('Students_trans.Delete_attachment')}}</h5>
>>>>>>> 28eda57 (Students_Promotions_managemen)
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('Delete_attachment')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$attachment->id}}">

                    <input type="hidden" name="student_name" value="{{$attachment->imageable->name}}">
                    <input type="hidden" name="student_id" value="{{$attachment->imageable->id}}">

<<<<<<< HEAD
                    <h5 style="font-family: 'Cairo', sans-serif;">{{trans('Students_trans.Delete_attachment_tilte')}}
                    </h5>
                    <input type="text" name="filename" readonly value="{{$attachment->filename}}" class="form-control">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{trans('Students_trans.Close')}}</button>
                        <button class="btn btn-danger">{{trans('Students_trans.submit')}}</button>
=======
                    <h5 style="font-family: 'Cairo', sans-serif;">{{trans('Students_trans.Delete_attachment_tilte')}}</h5>
                    <input type="text" name="filename" readonly value="{{$attachment->filename}}" class="form-control">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Students_trans.Close')}}</button>
                        <button  class="btn btn-danger">{{trans('Students_trans.submit')}}</button>
>>>>>>> 28eda57 (Students_Promotions_managemen)
                    </div>
                </form>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</div>
=======
</div>
>>>>>>> 28eda57 (Students_Promotions_managemen)
