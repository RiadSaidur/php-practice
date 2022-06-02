<?php

function redirect ($succssful) {
  $url = 'http://' . $_SERVER['HTTP_HOST'] . '?successful=' . $succssful;
  header('Location: ' . $url, true, 302);
}

function cleanData ($data) {
  return htmlspecialchars(trim($data));
}

function getHashedPassword ($password) {
  $hashedPassword = password_hash($password, PASSWORD_BCRYPT, ['mysalt']);
  return $hashedPassword;
}