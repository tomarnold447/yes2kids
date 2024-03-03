# Create your models here.
from django.db import models

class Patient(models.Model):
    name = models.CharField(max_length=100)
    date_of_birth = models.DateField()
    gender = models.CharField(max_length=10)
    scd_type = models.CharField(max_length=50)
    contact_number = models.CharField(max_length=20)
    address = models.TextField()
    emergency_contact = models.CharField(max_length=100)
    medical_history = models.TextField()

class Event(models.Model):
    event_name = models.CharField(max_length=100)
    date = models.DateField()
    description = models.TextField()
    location = models.CharField(max_length=255)
    registration_details = models.TextField()

class Donor(models.Model):
    donor_name = models.CharField(max_length=100)
    blood_type = models.CharField(max_length=10)
    contact_number = models.CharField(max_length=20)
    donation_history = models.TextField()

class SupportGroup(models.Model):
    group_name = models.CharField(max_length=100)
    description = models.TextField()
    meeting_schedule = models.CharField(max_length=255)

class Research(models.Model):
    research_title = models.CharField(max_length=255)
    description = models.TextField()
    principal_investigator = models.CharField(max_length=100)
    start_date = models.DateField()
    end_date = models.DateField()

class NewsletterSubscription(models.Model):
    email = models.EmailField(unique=True)
    name = models.CharField(max_length=100)
    subscription_date = models.DateTimeField(auto_now_add=True)
