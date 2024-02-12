// //Master Role
// function addDataRole() {
//     $.ajax({
//         url: "/masterrole/createform",
//         type: "GET",
//         dataType: "JSON",
//         success: function (data) {
//             $("#MasterRoleModal").modal("show");
//         },
//         error: function (error) {
//             console.error("Error fetching modal content:", error);
//             console.log(error);
//         },
//     });
// }
// $(document).ready(function () {
//     $("#formMasterRole").submit(function (e) {
//         e.preventDefault();
//         var formData = $(this).serialize();
//         $.ajax({
//             type: "POST",
//             url: "/masterrole/submit",
//             data: formData,
//             dataType: "json",
//             success: function (response) {
//                 if (response.success) {
//                     alert(response.message);
//                     $("#MasterRoleModal").modal("hide");
//                     // $("#masterroleTablebody").DataTable().ajax.reload();
//                     location.reload();
//                 } else {
//                     $(".error").show();
//                     $(".error").html(response.error);
//                 }
//             },
//             error: function (xhr, status, error) {
//                 var errorMessage =
//                     xhr.responseText || "Oops! Something went wrong.";
//                 console.log(errorMessage);
//                 alert("Error: " + errorMessage);
//             },
//         });
//     });
// });
// function editmasterrole(idRole) {
//     // $("#formMasterRoleEdit")[0].reset();
//     $.ajax({
//         url: "/masterrole/edit/" + idRole,
//         type: "GET",
//         dataType: "JSON",
//         success: function (data) {
//             $("#masterRoleEditModal").modal("show");
//             $("#idRole").val(data.roles["idRole"]); // Set nilai idRole
//             $('[name="namaRole"]').val(data.roles["namaRole"]);
//         },
//         error: function (error) {
//             console.error("Error fetching modal content:", error);
//         },
//     });
// }

// $(document).ready(function () {
//     $("#formMasterRoleEdit").submit(function (event) {
//         event.preventDefault();
//         var idRole = $("#idRole").val();
//         if (!idRole) {
//             alert("Error: ID Role is empty");
//             return;
//         }

//         var dataForm = $(this).serialize();
//         $.ajax({
//             type: "PUT",
//             url: "/masterrole/update/" + idRole,
//             data: dataForm,
//             success: function (response) {
//                 if (response.success) {
//                     alert(response.message);
//                     $("#MasterRoleEditModal").modal("hide");
//                     location.reload();
//                 } else {
//                     alert("Error: " + response.message);
//                 }
//             },
//             error: function (xhr, status, error) {
//                 var errorMessage =
//                     xhr.responseText || "Oops! Something went wrong.";
//                 console.log(errorMessage);
//                 alert("Error: " + errorMessage);
//             },
//         });
//     });
// });
// function deleteRole(idRole) {
//     if (confirm("Are you sure you want to delete this role?")) {
//         $.ajax({
//             url: "/masterrole/delete/" + idRole,
//             type: "DELETE",
//             dataType: "JSON",
//             success: function (response) {
//                 if (response.success) {
//                     alert(response.message);
//                     location.reload();
//                 } else {
//                     alert("Error: " + response.message);
//                 }
//             },
//             error: function (xhr, status, error) {
//                 var errorMessage =
//                     xhr.responseText || "Oops! Something went wrong.";
//                 console.log(errorMessage);
//                 alert("Error: " + errorMessage);
//             },
//         });
//     }
// }

$("body").on("click", "#btn-delete-post", function () {
    let post_id = $(this).data("id");
    let token = $("meta[name='csrf-token']").attr("content");

    Swal.fire({
        title: "Apakah Kamu Yakin?",
        text: "ingin menghapus data ini!",
        icon: "warning",
        showCancelButton: true,
        cancelButtonText: "TIDAK",
        confirmButtonText: "YA, HAPUS!",
    }).then((result) => {
        if (result.isConfirmed) {
            console.log("test");

            //fetch to delete data
            $.ajax({
                url: `/masterrole/delete/${post_id}`,
                type: "DELETE",
                cache: false,
                headers: {
                    "X-CSRF-TOKEN": token,
                },
                success: function (response) {
                    //show success message
                    Swal.fire({
                        type: "success",
                        icon: "success",
                        title: `${response.message}`,
                        showConfirmButton: false,
                        timer: 3000,
                    });
                    location.reload();
                },
            });
        }
    });
});

function editRole(idRole) {
    $.ajax({
        url: "/masterrole/edit/" + idRole,
        type: "GET",
        dataType: "JSON",
        success: function (data) {
            $("#editModal").modal("show");
            console.log("id :", data.role.idRole);
            $("#idRole").val(idRole);
            $('[name="namaRole"]').val(data.role.namaRole);
        },
        error: function (error) {
            console.error("Error fetching modal content:", error);
        },
    });
}

$(document).ready(function () {
    $("#formMasterRole").submit(function (event) {
        event.preventDefault();

        var idRole = $("#idRole").val();
        var url = idRole
            ? "/masterrole/update/" + idRole
            : "/masterrole/submit";

        var dataForm = $(this).serialize();
        $.ajax({
            type: idRole ? "PUT" : "POST",
            url: url,
            data: dataForm,
            success: function (response) {
                if (response.success) {
                    alert(response.message);
                    $("#editModal").modal("hide");
                    location.reload();
                } else {
                    alert("Error: " + response.message);
                }
            },
            error: function (xhr, status, error) {
                var errorMessage =
                    xhr.responseText || "Oops! Something went wrong.";
                console.log(errorMessage);
                alert("Error: " + errorMessage);
            },
        });
    });
});

// INI MASTER ABSEN
$("body").on("click", "#btn-delete-post", function () {
    let post_id = $(this).data("id");
    let token = $("meta[name='csrf-token']").attr("content");

    Swal.fire({
        title: "Apakah Kamu Yakin?",
        text: "ingin menghapus data ini!",
        icon: "warning",
        showCancelButton: true,
        cancelButtonText: "TIDAK",
        confirmButtonText: "YA, HAPUS!",
    }).then((result) => {
        if (result.isConfirmed) {
            console.log("test");

            //fetch to delete data
            $.ajax({
                url: `/masterabsen/delete/${post_id}`,
                type: "DELETE",
                cache: false,
                headers: {
                    "X-CSRF-TOKEN": token,
                },
                success: function (response) {
                    //show success message
                    Swal.fire({
                        type: "success",
                        icon: "success",
                        title: `${response.message}`,
                        showConfirmButton: false,
                        timer: 3000,
                    });
                    location.reload();
                },
            });
        }
    });
});

function editAbsen(idAbsen) {
    $.ajax({
        url: "/masterabsen/edit/" + idAbsen,
        type: "GET",
        dataType: "JSON",
        success: function (data) {
            $("#editModal").modal("show");
            console.log("id :", data.absen.idAbsen);
            $("#idAbsen").val(idAbsen);
            $('[name="keterangan"]').val(data.absen.keterangan);
        },
        error: function (error) {
            console.error("Error fetching modal content:", error);
        },
    });
}

$(document).ready(function () {
    $("#formMasterAbsen").submit(function (event) {
        event.preventDefault();

        var idAbsen = $("#idAbsen").val();
        var url = idAbsen
            ? "/masterabsen/update/" + idAbsen
            : "/masterabsen/submit";

        var dataForm = $(this).serialize();
        $.ajax({
            type: idAbsen ? "PUT" : "POST",
            url: url,
            data: dataForm,
            success: function (response) {
                if (response.success) {
                    alert(response.message);
                    $("#editModal").modal("hide");
                    location.reload();
                } else {
                    alert("Error: " + response.message);
                }
            },
            error: function (xhr, status, error) {
                var errorMessage =
                    xhr.responseText || "Oops! Something went wrong.";
                console.log(errorMessage);
                alert("Error: " + errorMessage);
            },
        });
    });
});
