USE [ElevenDB]
GO

/****** Object:  Table [dbo].[Empresas]    Script Date: 29/10/2016 21:01:10 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Empresas](
	[CODIGO] [numeric](18, 0) NOT NULL,
	[RazaoSocial] [varchar](50) NOT NULL,
	[CNPJ] [numeric](18, 0) NOT NULL,
 CONSTRAINT [PK_Empresas] PRIMARY KEY CLUSTERED 
(
	[CODIGO] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

