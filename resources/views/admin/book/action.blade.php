<!--button edit-->
<a href="{{route('admin.book.edit',$model)}}" class="btn btn-warning">Edit</a>

<!--button hapus-->
<button href="{{route('admin.book.destroy',$model)}}" class="btn btn-danger" id="delete">Delete</button>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $('button#delete').on('click', function(e){
        e.preventDefault();

        var href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah kamu yakin ingin hapus?',
            text: "Data yang sudah terhapus harus input lagi loh!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Apus Ae!'
            }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm').action = href;
                document.getElementById('deleteForm').submit();
                    
                Swal.fire(
                    'Deleted!',
                    'Data kamu berhasil dihapus.',
                    'success'
                )
            }
        })

        
    })
</script>