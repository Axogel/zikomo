document.addEventListener('DOMContentLoaded', function () {
    // Toggle sidebar
    document.getElementById('menu-toggle').addEventListener('click', function () {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('hidden');
    });

    // Toggle profile menu
    document.getElementById('profile-menu-toggle').addEventListener('click', function (event) {
        event.stopPropagation();
        var profileMenu = document.getElementById('profile-menu');
        var notificationMenu = document.getElementById('notification-menu');

        if (!profileMenu.classList.contains('hidden')) {
            profileMenu.classList.add('hidden');
        } else {
            notificationMenu.classList.add('hidden'); // Close notification menu if it's open
            profileMenu.classList.remove('hidden');
        }
    });

    // Toggle notification menu
    document.getElementById('notification-menu-toggle').addEventListener('click', function (event) {
        event.stopPropagation();
        var notificationMenu = document.getElementById('notification-menu');
        var profileMenu = document.getElementById('profile-menu');

        if (!notificationMenu.classList.contains('hidden')) {
            notificationMenu.classList.add('hidden');
        } else {
            profileMenu.classList.add('hidden'); // Close profile menu if it's open
            notificationMenu.classList.remove('hidden');
        }
    });

    // Close menus if clicked outside
    window.addEventListener('click', function (event) {
        var profileMenu = document.getElementById('profile-menu');
        var notificationMenu = document.getElementById('notification-menu');

        if (!event.target.closest('#profile-menu-toggle') && !profileMenu.classList.contains('hidden')) {
            profileMenu.classList.add('hidden');
        }

        if (!event.target.closest('#notification-menu-toggle') && !notificationMenu.classList.contains('hidden')) {
            notificationMenu.classList.add('hidden');
        }
    });
});
