const flashdata = $('.flash-data').data('flashdata');
if (flashdata){
    Swal.fire(
        '',
        flashdata,
        'error'
      )
}