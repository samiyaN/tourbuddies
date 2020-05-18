<?php

session_start();

require_once '../model/database.php';

function createTour($place, $cost, $date, $duration, $maxBooking, $contact, $description, $organizer_id, $managerId)
{
    $query = "INSERT INTO `tours` (`id`, `place`, `cost`, `date`, `duration`, `maxBooking`, `booked`, `isFull`, `picture`, `organizerId`, `Rating`, `managerID`, `managerRating`) VALUES (NULL, '$place', '$cost', '$date', '$duration', '$maxBooking', 0 , 0, '', '$organizer_id', 0, '$managerId', 0)";

    $result = insert($query);
    if ($result) {
        header('location: ./event.php');
    }

}

function getAllTours()
{
    $query = "SELECT * FROM tours ORDER BY id DESC";
    $result = get($query);
    return $result;
}

function getUserTours($userId)
{
    $query = "SELECT * FROM tour_user WHERE userId=$userId";
    $result = get($query);
    return $result;
}
function getPlannerTours($organizerId)
{
    $query = "SELECT * FROM tours WHERE organizerId=$organizerId";
    $result = get($query);
    return $result;
}

function getTourName($tourId)
{
    $query = "SELECT * FROM tours WHERE id=$tourId";
    $result = get($query);
    return $result;
}

function bookTour($userId, $eventId)
{
    $query = "INSERT INTO `tour_user` (`id`, `userId`, `tourId`) VALUES (NULL, $userId, $eventId)";
    $result = insert($query);
    if ($result) {
        header('location: travellerprofile.php');
    }
}