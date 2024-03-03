# admin.py

from django.contrib import admin
from .models import Patient, Event, Donor, SupportGroup, Research, NewsletterSubscription

admin.site.register(Patient)
admin.site.register(Event)
admin.site.register(Donor)
admin.site.register(SupportGroup)
admin.site.register(Research)
admin.site.register(NewsletterSubscription)
