# My First Calculator

This problem is part of the `Intro to Hacking Workshop`. View the [Bug Bounty Guide](https://github.com/hackmtlca/bug-bounty-guide) for more information about the score system.

## Context

Hey I'm John Doe. I'm the biggest calculator nerd ever. I want to make the best calculator apps. I made so many calculators in so many languages. This said, the `SQL Calculator` and `PHP Calculator` seem to be the biggest issues. I got my database dumped and my secret file stolen. Can you help me out?

## Special Offer

We are ready to offer a significant amount of points for someone that can get a full Linux interactive shell with the server. Take it as a challenge!

## Running the App

All you need is `Docker`. Run the following command in the root of this repository:

```
docker-compose up
```

A frontend instance will be created at `http://localhost/`. Make sure to wait for a message from the database instance stating `port: 3306` is open.

## Closing the App

The app can be closed using CTRL+C. The app can be completely closed with the following command in the root of this repository:

```
docker-compose down
```