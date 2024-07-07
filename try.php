<div class="container mt-4">
        <h2>Booked domestic property details</h2>
        <div class="table-responsive">
            <table class="table table-striped table-bordered" style="width:1000px" >
                <thead style="Background-color:balck">
                    <tr >
                        <th class="text-center">Property photo</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">startdate</th>
                        <th class="text-center">enddate</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($rows)): ?>
                        <?php foreach ($rows as $row): ?>
                            <tr>
                                <td>
                                    <?php foreach (explode(',', $row['dPhoto']) as $image): ?>
                                        <div class="slide">
                                              <img src="<?php echo $image; ?>" alt="Image">
                                        </div>
                                    <?php endforeach; ?>
                                </td>
                                <td><?php echo $row['fullname']; ?></td>
                                <td class="text-center"><?php echo htmlspecialchars($row['startdate']); ?></td>
                                <td class="text-center"><?php echo htmlspecialchars($row['enddate']); ?></td>
                                <td class="text-center"><button class="p-1 btn-danger" style="border-radius:4px">Booked</button></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">No booked properties found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
