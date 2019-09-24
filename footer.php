</main>
		<footer>
		<nav id="footnav">
            <ul>
                <li <?php if ($activePage == "foryou" || $activePage == "event" || $activePage == "collection") {echo "class='active'";}?>>
                    <a href="foryou.php">Discovery</a>
                </li>
                <li <?php if ($activePage == "search") {echo "class='active'";}?>>
                    <a href="search.php">Search</a>
                </li>
                <li <?php if ($activePage == "userAccount") {echo "class='active'";}?>>
                    <a href="userAccount.php">User</a>
                </li>
            </ul>
        </nav>
		</footer>

	</body>

</html>