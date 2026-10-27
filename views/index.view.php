<?php include 'views/partials/head.php'; ?>
<?php include 'views/partials/nav.php'; ?>
<?php include 'views/partials/banner.php'; ?>

<!-- Main content -->
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

        <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
            <table class="w-full text-sm text-left rtl:text-right text-body">
                <thead class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-medium">
                            User ID
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            First Name
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Last Name
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr class="bg-neutral-primary border-b border-default">
                            <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                <?= $user['id'] ?>
                            </th>
                            <td class="px-6 py-4">
                                <?= $user['first_name'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $user['last_name'] ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>



</main>

<!-- footer -->
<?php include 'views/partials/footer.php'; ?>