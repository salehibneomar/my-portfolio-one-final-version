$('.table').on('click', '.dlt-btn', (e)=>{
    e.preventDefault();
    const link = e.currentTarget.href
    //console.log(link)
    swal({
        title: "Want to delete?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((confirm_operation) => {
        if (confirm_operation) {
            window.location.href = link
        }
    });
})