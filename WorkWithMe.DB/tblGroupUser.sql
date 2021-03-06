﻿CREATE TABLE [dbo].[tblGroupUser]
(
	[Id] UNIQUEIDENTIFIER NOT NULL PRIMARY KEY, 
    [UserId] UNIQUEIDENTIFIER NOT NULL, 
    [GroupId] UNIQUEIDENTIFIER NOT NULL, 
    [IsGroupAdmin] BIT NOT NULL, 
    [CanPost] BIT NOT NULL, 
    [CanInvite] BIT NOT NULL, 
    [CanDelete] BIT NOT NULL
)
