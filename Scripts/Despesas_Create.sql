USE [ElevenDB]
GO

/****** Object:  Table [dbo].[Despesas]    Script Date: 29/10/2016 21:00:50 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[Despesas](
	[CODIGO] [numeric](18, 0) NOT NULL,
	[Descricao] [nchar](10) NULL,
	[Percentagem] [numeric](18, 0) NULL,
 CONSTRAINT [PK_Despesas] PRIMARY KEY CLUSTERED 
(
	[CODIGO] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

