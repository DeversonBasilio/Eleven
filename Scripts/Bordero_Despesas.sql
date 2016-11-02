USE [ElevenDB]
GO

/****** Object:  Table [dbo].[Bordero_Despesas]    Script Date: 29/10/2016 21:00:38 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[Bordero_Despesas](
	[COD_Bordero] [numeric](18, 0) NOT NULL,
	[COD_Despesas] [numeric](18, 0) NOT NULL,
	[Valor] [nchar](10) NOT NULL
) ON [PRIMARY]

GO

ALTER TABLE [dbo].[Bordero_Despesas]  WITH CHECK ADD  CONSTRAINT [FK_Bordero_Despesas_Bordero] FOREIGN KEY([COD_Bordero])
REFERENCES [dbo].[Bordero] ([CODIGO])
GO

ALTER TABLE [dbo].[Bordero_Despesas] CHECK CONSTRAINT [FK_Bordero_Despesas_Bordero]
GO

ALTER TABLE [dbo].[Bordero_Despesas]  WITH CHECK ADD  CONSTRAINT [FK_Bordero_Despesas_Despesas] FOREIGN KEY([COD_Despesas])
REFERENCES [dbo].[Despesas] ([CODIGO])
GO

ALTER TABLE [dbo].[Bordero_Despesas] CHECK CONSTRAINT [FK_Bordero_Despesas_Despesas]
GO

