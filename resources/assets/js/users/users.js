listenClick('.user-delete-btn', function (event) {
    let recordId = $(event.currentTarget).data('id');
    deleteItem(route('users.destroy', recordId), 'user',
    'Package');
})
listenClick('.package-delete-btn', function (event) {
    let recordId = $(event.currentTarget).data('id');
    deleteItem(route('packages.destroy', recordId), 'package',
        'Package');
})

listenClick('.job-delete-btn', function (event) {
    let recordId = $(event.currentTarget).data('id');
    deleteItem(route('jobs.destroy', recordId), 'job',
        'Job');
})
