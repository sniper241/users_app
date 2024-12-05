function confirm_delete(id){
  console.log(id);
  let del1 = confirm("Do you want to delete this user ?");
  if ( del1 == true){
    window.location.href ="del.php?action=del&&id="+id;
  }

}

function edit(id){
    window.location.href = "edit.php?action=edit&&id="+id;
  }

function show_add(){
toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"

}
Command: toastr["success"]("User added successfully", "Adding a user")

}

function show_del(){
  toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  
  }
  Command: toastr["error"]("User deleted successfully", "Delete a user")
  
  }