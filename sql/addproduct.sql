INSERT INTO `addproduct` (`id`, `name`, `description`,'category','image') VALUES
(1, 'Salman', 'khan',121,'.com'),
(2, 'Kiara', 'advani',234,'.com' ),
(3, 'Shahrukh', 'shah',424,'.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`sno`);



--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `addproduct`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;



