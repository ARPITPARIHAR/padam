function validate(e) {
    if (e.value.trim() !== "") {
        e.value = parseFloat(e.value).toFixed(2);
    } else {
        e.value = null;
    }
}

function removeProjectImage(id) {
    // let imageIndex = $("#" + id).data("id"); //index of single image
    let imagename = $("#" + id).data("name"); //single image name with path
    let projectId = $("#" + id).data("src"); //id of service
    let url = $("#" + id).data("url");
    let divId = $("#" + id).data("type");
    let columnName = $("#" + id).data("image-column");
    console.log("imageName", imagename);
    console.log("projectId", projectId);
    console.log("url", url);
    console.log("divId", divId);
    console.log("columnName", columnName);
    Swal.fire({
        title: "Are you sure?",
        text: "Do you want to delete this image?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        cancelButtonText: "No",
        confirmButtonText: "Yes",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: url,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                data: {
                    _token: $('meta[name="csrf-token"]').attr("content"),
                    id: projectId,
                    imagename: imagename,
                    columnName: columnName,
                },
                success: function (response) {
                    if (response.status == "success") {
                        console.log("image removed");
                        $("#" + divId).remove();
                        // console.log(window.location);
                    } else {
                        console.log("Error!");
                    }
                },
            });
        }
    });
}

function deleteConfirmation(id, name) {
    console.log(name);
    console.log(id);
    console.log(base_path);
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then(
        function (e) {
            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr("content");

                $.ajax({
                    type: "POST",
                    url: base_path + "/" + name + "/delete/" + id,
                    data: { _token: CSRF_TOKEN },
                    dataType: "JSON",
                    success: function (results) {
                        if (results.success === true) {
                            swal.fire("Done!", results.message, "success");
                            // refresh page after 2 seconds
                            setTimeout(function () {
                                location.reload();
                            }, 2000);
                        } else {
                            swal.fire("Error!", results.message, "error");
                        }
                    },
                });
            } else {
                e.dismiss;
            }
        },
        function (dismiss) {
            return false;
        }
    );
}
