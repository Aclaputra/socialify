drop table if exists likes;
drop table if exists follows ;
drop table if exists "comments" ;
drop table if exists notifications;
drop table if exists account_tweet_histories ;
drop table if exists tweet_details ;
drop table if exists accounts;

CREATE TABLE "account_tweet_histories" (
  "account_tweet_history_id" serial PRIMARY KEY,
  "account_id" integer,
  "tweet_id" varchar(255),
  "created_at" timestamp
);

CREATE TABLE "tweet_details" (
  "tweet_id" varchar(255) PRIMARY KEY,
  "tweet" text,
  "slug" text UNIQUE,
  "embed_url" varchar(255),
  "tweet_views" integer
);

CREATE TABLE "follows" (
  "account_id" integer PRIMARY KEY,
  "following_id" integer UNIQUE
);

CREATE TABLE "likes" (
  "account_id" integer PRIMARY KEY,
  "tweet_id" varchar(255) UNIQUE
);

CREATE TABLE "accounts" (
  "account_id" serial PRIMARY KEY,
  "email" varchar(255) UNIQUE,
  "password" varchar(255),
  "name" varchar(100),
  "username" varchar(20) UNIQUE,
  "biography" varchar(255),
  "birth_date" date,
  "location" varchar(20),
  "age" integer,
  "ip_address" varchar(255)
);

CREATE TABLE "comments" (
  "account_tweet_history_id" integer PRIMARY KEY,
  "comment_id" integer
);

ALTER TABLE "account_tweet_histories" ADD FOREIGN KEY ("account_id") REFERENCES "accounts" ("account_id");

ALTER TABLE "account_tweet_histories" ADD FOREIGN KEY ("tweet_id") REFERENCES "tweet_details" ("tweet_id");

ALTER TABLE "follows" ADD FOREIGN KEY ("account_id") REFERENCES "accounts" ("account_id");

ALTER TABLE "follows" ADD FOREIGN KEY ("following_id") REFERENCES "accounts" ("account_id");

ALTER TABLE "likes" ADD FOREIGN KEY ("account_id") REFERENCES "accounts" ("account_id");

ALTER TABLE "likes" ADD FOREIGN KEY ("tweet_id") REFERENCES "tweet_details" ("tweet_id");

ALTER TABLE "comments" ADD FOREIGN KEY ("account_tweet_history_id") REFERENCES "account_tweet_histories" ("account_tweet_history_id");

ALTER TABLE "comments" ADD FOREIGN KEY ("comment_id") REFERENCES "account_tweet_histories" ("account_tweet_history_id");