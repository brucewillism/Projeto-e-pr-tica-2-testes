dump:
	mysqldump -u root -p -d projeto > bd.sql

restore:
	mysql -u root -p -D projeto < bd.sql