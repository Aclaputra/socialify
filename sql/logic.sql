select * from account_tweet_histories ath ;
select * from accounts a ;
select * from "comments" c ;
select * from follows f ;
select * from likes l ;
select * from notifications n ;
select * from tweet_details td ;

-- register
insert into accounts 
values
(
	'XWT01',
	'aclaputra',
	'my bio',
	'2000-11-12',
	'Jakarta',
	'23'
),
(
	'XWT02',
	'lovelyira',
	'full stuck developer',
	'2001-10-02',
	'Surabaya',
	'22'
);

-- check user
select * from accounts a ;

insert into tweet_details 
values
(
	'TWT01',
	'Whats wrong with my .htaccess ?',
	'https://twitter.com/trogoldyte/status/1759531453925449960',
	'https://photo-url-htacces-7822',
	0
),
(
	'TWT02',
	'I found this under my bed :shock:',
	'https://twitter.com/trogoldyte/status/1759531453925449969',
	'https://photo-url-htacces-788',
	0
),
(
	'TWT03',
	'Emang paling enak rebahan di Taman :sleepy:',
	'https://twitter.com/trogoldyte/status/1759531453925449961',
	'https://photo-url-htacces-7900',
	0
),
(
	'TWT04',
	'Guys ada yang lagi di Taman Ragunan ?',
	'https://twitter.com/trogoldyte/status/1759531453925449962',
	'https://photo-url-htacces-7822',
	0
),
(
	'TWT05',
	'Aku lagi sendirian guys, tolong ajak live code',
	'https://twitter.com/trogoldyte/status/1759531453925449963',
	'https://photo-url-htacces-7830',
	0
);

-- check tweets
select * from tweet_details td ;
-- get tweet views
select tweet_id, tweet_views from tweet_details td ;
-- someone viewing this tweet
update tweet_details set tweet_views = tweet_views + 1 where tweet_id = 'TWT03';

-- check account tweet history
select * from account_tweet_histories ath ;
-- insert data
insert into account_tweet_histories 
values
(
	1,
	'XWT01',
	'TWT01',
	'2024-01-12 11:10:25-07'
),
(
	2,
	'XWT01',
	'TWT02',
	'2024-01-13 18:05:25-07'
),
(
	3,
	'XWT01',
	'TWT03',
	'2024-02-10 19:05:25-07'
),
(
	4,
	'XWT01',
	'TWT04',
	'2024-02-19 06:10:25-07'
),
(
	5,
	'XWT02',
	'TWT05',
	'2024-02-19 09:08:25-07'
);

-- check tweets
select * from account_tweet_histories ath ;
select * from tweet_details td ;
select * from accounts a ;

-- get tweets for homepage
select ath.tweet_id , tweet, slug, embed_url, tweet_views, name as account_name, bio, birth_date, location, age
from account_tweet_histories ath 
left join tweet_details td on ath.tweet_id = td.tweet_id 
left join accounts a on ath.account_id = a.account_id;

-- get tweets for profile for XWT01 / user aclaputra
select ath.tweet_id , tweet, slug, embed_url, tweet_views, account_id
from account_tweet_histories ath 
left join tweet_details td on ath.tweet_id = td.tweet_id 
where account_id = 'XWT01';

-- get tweets for profile for XWT01 / user lovelyira
select ath.tweet_id , tweet, slug, embed_url, tweet_views, account_id
from account_tweet_histories ath 
left join tweet_details td on ath.tweet_id = td.tweet_id 
where account_id = 'XWT02';

-- dumps
--delete from accounts a where a.account_id = 'ACC01'; 