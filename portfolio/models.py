from django.db import models


class Project(models.Model):
    ''' A Project. Should be classified into a category and have a verbose
    description '''
    title = models.CharField(max_length=50)
    description = models.TextField()
    # TODO: add tags and categories
    # tags =
    # categories =

    def __unicode__(self):
        return self.title


class ProjectSection(models.Model):
    ''' Defines a section of the project with further details. '''
    header = models.CharField(max_length=30)
    body = models.TextField()
    # TODO: ImageField for background and content
    # background_image = models.CharField(max_length=30)
    # image = models.CharField(max_length=30)
    project = models.ForeignKey(Project)

    def __unicode__(self):
        return self.header
